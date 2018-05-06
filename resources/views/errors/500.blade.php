@extends('layouts.error')
@section('pagetitle', 'Er ging iets mis!')
@section('message', ($exception->getMessage() != "") ? $exception->getMessage() : "Er ging iets mis!")