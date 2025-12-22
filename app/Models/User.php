<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'fname',
        'lname',
        'email',
        'country',
        'city',
        'mobile',
        'address',
        'content',
        'username',
        'expertise',
        'password',
        'type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

     /**
     * Interact with the user's first name.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function type(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["user", "admin", "manager"][$value],
        );
    }

    /**
     * Get the user's avatar URL.
     * Handles both local images and external URLs (like Gravatar).
     * Returns default avatar if no image exists.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function avatarUrl(): Attribute
    {
        return new Attribute(
            get: function ($value, $attributes) {
                $image = $attributes['image'] ?? null;
                
                // If no image or empty string, return default avatar
                if (empty($image) || trim($image) === '') {
                    return $this->getDefaultAvatar();
                }
                
                // If image is already a full URL (http/https), verify it's valid
                if (filter_var($image, FILTER_VALIDATE_URL)) {
                    // Check if it's a valid external URL, return as is
                    return $image;
                }
                
                // Otherwise, treat as local file path
                $imagePath = ltrim($image, '/');
                
                // Check if file exists
                $fullPath = public_path('uploads/users/' . basename($imagePath));
                
                // If file doesn't exist, return default avatar
                if (!file_exists($fullPath)) {
                    return $this->getDefaultAvatar();
                }
                
                // Build the URL for local file
                if (strpos($imagePath, 'uploads/users/') === 0) {
                    return url($imagePath);
                }
                
                return url('uploads/users/' . $imagePath);
            }
        );
    }

    /**
     * Get default avatar (standard placeholder image)
     *
     * @return string
     */
    public function getDefaultAvatar(): string
    {
        // First check if a default avatar exists in uploads/users/
        $defaultAvatarPath = 'uploads/users/default-avatar.png';
        $publicPath = public_path($defaultAvatarPath);
        
        // If default avatar file exists, use it
        if (file_exists($publicPath)) {
            return url($defaultAvatarPath);
        }
        
        // Otherwise, generate initials-based avatar using a reliable service
        $name = $this->name ?? $this->email ?? 'User';
        $initials = '';
        $words = explode(' ', trim($name));
        
        if (count($words) >= 2) {
            $initials = strtoupper(substr($words[0], 0, 1) . substr($words[1], 0, 1));
        } else {
            $initials = strtoupper(substr($name, 0, 2));
        }
        
        // Use a standard color scheme for consistency
        // Return a generated avatar with initials
        return "https://ui-avatars.com/api/?name=" . urlencode($initials) . "&background=667eea&color=fff&size=128&bold=true";
    }
}
