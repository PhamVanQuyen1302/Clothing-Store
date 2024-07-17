<?php  

namespace App\Models;  

use Illuminate\Database\Eloquent\Factories\HasFactory;  
use Illuminate\Foundation\Auth\User as Authenticatable; // Đúng cách  
use Illuminate\Notifications\Notifiable;  

class User extends Authenticatable // Kế thừa Authenticatable thay vì Model  
{  
    use HasFactory, Notifiable;  

    /**  
     * Specify the table associated with the model.  
     *   
     * @var string  
     */  
    protected $table = 'users';  

    /**  
     * The attributes that are mass assignable.  
     *   
     * @var array  
     */  
    protected $fillable = [  
        'name',   
        'email',   
        'password',   
        'tel',   
        'age',   
        'avatar',   
        'address',      
        'gender',   
        'status',
        'role_id' 
    ];  

    /**  
     * The attributes that should be hidden for arrays.  
     *  
     * @var array  
     */  
    protected $hidden = [  
        'password',   
        'remember_token',  
    ];  

    /**  
     * The attributes that should be cast to native types.  
     *  
     * @var array  
     */  
    protected $casts = [  
        'email_verified_at' => 'datetime',  
    ];  

    /**  
     * Get the role associated with the user.  
     */  
    public function role() {  
        return $this->belongsTo(Roles::class);  
    }  
}