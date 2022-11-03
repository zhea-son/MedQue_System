<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class App extends Model
{
    use CrudTrait, HasFactory;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'apps';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function doc()
    {
        return User::find($this->doctor_id);
    }

    public static function getExpectedTime($date, $doctor_id) {
        $max = \App\Models\App::where('date', $date)->where('doctor_id', $doctor_id)->max('expected_time');
        $doc_t = \App\Models\DoctorTime::where('user_id', $doctor_id)->first();
        if ($max) {
            $next_ts = strtotime($date . ' ' . $max) + config('app.time_frame')*60;
            $end_ts = strtotime($date . ' ' . ($doc_t->end ?? '20:00:00'));
            if ($next_ts > $end_ts) {
                return null;
            } else {
                return date('H:i:s', $next_ts);
            }
        } else {
            return ($doc_t->start ?? '07:00:00');
        }
    }

    public static function loadAppointments() {
        $depts = Dept::pluck('id');

        foreach ($depts as $dept) {
            \App\Models\App::factory(8)->create(['dept_id' => $dept]);
        }
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function dept()
    {
        return $this->belongsTo(Dept::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
