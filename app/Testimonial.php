<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name',
        'code',
        'contact_no',
        'location',
        'id_no',
        'product_cat',
        'received_date',
        'link',
        'published_date',
        'status',
        'reward_product',
        'srn_no',
        'evoucher',
        'platform',
        'caregiver_name',
        'caregiver_code',
        'caregiver_contact_no',
        'caregiver_status',
        'caregiver_reward_product',
        'caregiver_srn_no',
        'caregiver_evoucher',
        'delete_flag',
    ];
}
