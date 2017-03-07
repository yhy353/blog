<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{


  /**
   * The attributes that should be mutated to dates.
   *
   * @var array
   */
  protected $dates = ['published_at', 'created_at', 'deleted_at'];

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'user_id',
      'last_user_id',
      'category_id',
      'title',
      'subtitle',
      'slug',
      'page_image',
      'content',
      'meta_description',
      'is_draft',
      'is_original',
      'published_at',
  ];
}
