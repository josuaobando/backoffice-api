<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
  protected $table = 'sbTransaction';
  protected $id = 'sbTransaction_id';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'sbTransaction_id',
    'sbMerchantCredential_id',
    'sbMerchant_id',
    'sbMarket_id',
    'sbCoreInstance_id',
    'sbUser_id',
    'sbTransactionType_id',
    'sbTransactionStatus_id',
    'address',
    'sbCurrency_id',
    'requestedAmount',
    'rate',
    'finalAmount',
    'amount',
    'fee',
    'mFee',
    'reference',
    'processingFee',
    'exchangeFee',
    'validUntil',
    'created_at',
    'updated_at',
    'updated_at'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [];
}
