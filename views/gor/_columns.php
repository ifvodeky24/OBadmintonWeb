<?php
use yii\helpers\Url;
use yii\helpers\Html;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
        [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'id_gor',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'nama_gor',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'alamat_gor',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'longitude',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'latitude',
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'deskripsi',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'jumlah_lapangan',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute' => 'foto',
        'format' => 'html',    
        'value' => function ($data) {
            return Html::img(Yii::getAlias('@web').'/files/gor/'. $data['foto'],
                ['width' => '100px', 'height' => '100%']);
        },
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'fasilitas',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'id_pengelola',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'createdAt',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'updatedAt',
    // ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   