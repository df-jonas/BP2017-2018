@extends('layouts.error')
@section('pagetitle', 'Pagina niet gevonden')
@section('message', ($exception->getMessage() != "") ? $exception->getMessage() : "Deze pagina kon niet gevonden worden.")