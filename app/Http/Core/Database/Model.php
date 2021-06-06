<?php
/**
 * Created by PhpStorm.
 * User: jedy
 * Date: 11/12/18
 * Time: 3:07 PM
 */

namespace App\Core\Database;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

/**
 * Class Model
 * @package TlankyCMS\Core\Database
 */
abstract class Model extends \Illuminate\Database\Eloquent\Model
{

    /**
     * @return mixed
     */
    public function slider()
    {
        return $this->belongsToMany(Slider::class,'slider_to_any','row_uuid','slider_uuid','uuid','uuid')
            ->withPivot('type');
    }


    /**
     * @return mixed
     */
    public function form()
    {
        return $this->belongsToMany(Forms::class, 'form_to_any','row_uuid','form_uuid','uuid','uuid');
    }

    /**
     * @return mixed
     */
    public function galleries()
    {
        return $this->belongsToMany(Media::class,'media_to_any','row_uuid','media_uuid','uuid','uuid')
            ->withPivot('type')->where('type','=','GALLERY');
    }

    /**
     * @return mixed
     */
    public function attachments()
    {
        return $this->belongsToMany(Media::class,'media_to_any','row_uuid','media_uuid','uuid','uuid')
            ->withPivot('type')->where('type','=','ATTACHMENT');
    }

    /**
     * @return mixed
     */
    public function media()
    {
        return $this->belongsToMany(Media::class,'media_to_any','row_uuid','media_uuid','uuid','uuid')
            ->withPivot('type');
    }

    /**
     * @trigger triggers when model action called
     */
    public static function boot()
    {


        self::creating(function($model){
            $model->beforeBoot();
        });



        self::created(function($model){

            Model::writeLog('CREATED',$model->table, get_class($model), serialize($model->attributes));
        });

        self::updated(function($model){
            Model::writeLog('UPDATED',$model->table, get_class($model), serialize($model->attributes));
        });


        self::deleted(function($model){
            $array = array('delete_at'=>date('d-m-Y H:m:s'),'delete_title'=>$model->title);
            $model->attributes = array_merge($model->attributes,$array);
            Model::writeLog('DELETED',$model->table, get_class($model), serialize($model->attributes));
        });

        parent::boot();

    }

    /**
     * @return mixed
     */
    abstract function beforeBoot();

    private static function writeLog($action,$table,$model,$message = '' )
    {
        $log = new UserLog();
        $log->action = $action;
        $log->ip = Request::ip();
        $log->table = $table;
        $log->model = $model;
        $log->message = $message;
        $log->user_id = isset(Auth::user()->id) ? Auth::user()->id : "";
        $log->save();
    }
}
