<?php
/**
 * Created by PhpStorm.
 * User: Nisha
 * Date: 4/2/2017
 * Time: 1:14 AM
 */

@extends('layouts.app')

@section('content')
    <body background="images/webbginside.jpg">
    <div style="width: 100%">

        @include('includes.groundstaffsidebar')

        <div class="container" style="float: right; width: 80%;">
            <div class="pull-right">
                <img class="pull-right" src="{{URL::asset('/images/logo.png')}}" alt="profile Pic" height="100" width="150">
            </div>
        </div>
        <div> <body style='background-color:whitesmoke'></div>

        SELECT *
        FROM evidence;
