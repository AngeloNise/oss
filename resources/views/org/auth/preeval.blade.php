@extends('layout.orglayout')
@section('content')
<div class="content-container">
    <h1>Pre Evaluation</h1>
    <div class="activity-question">
        <p>What type of Activity?</p>
    </div>
    <div class="activity-buttons">
        <a href="{{ url('/Fund-Raising') }}" class="button">Fund Raising Activity</a>
        <a href="{{ url('/In-Campus-Activity') }}" class="button">In-Campus Activity</a>
        <a href="{{ url('/Off-Campus-Activity') }}" class="button">Off-Campus Activity</a>
    </div>
    <div class="note">
        <p>Note: Pre Evaluation doesn’t guarantee an approved Evaluation. It just helps to check if you have all the requirements needed to have an approved activity.</p>
    </div>
</div>
@endsection
