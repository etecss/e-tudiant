@extends('layouts.app')

@section('content')

@include('blocks.menuFormateur')

<div class="tab quizz-create">
	<div id="quizz" class="tab-pane fade in active ">
		<div class="title">
			<h3>Quizz</h3>
		</div>
		<div class="tab-content">
		{!! Form::open(array('route' => ['session.store', 1/* TODO DYNAMIC CLASSROOM_ID */], 'method' => 'post')) !!}

			@foreach($quizz->question as $question)
				<div>
					{{ $question->question }} :

					@foreach($question->answer as $answer)
						{!! Form::label('question_' . $answer->question_id, $answer->answer) !!}
						{!! Form::radio('question_' . $answer->question_id, $answer->id) !!}
					@endforeach
					{!! $errors->first('name', '<small class="help-block">:message</small>') !!}
				</div>
			@endforeach

			<div class="btn-create">
				{!! Form::submit('Sauvegarder') !!}
			</div>

		{!! Form::close() !!}
		</div>
	</div>
</div>

@endsection()