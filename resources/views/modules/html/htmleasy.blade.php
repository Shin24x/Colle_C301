
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- ... Your head content ... -->
  </head>
  <body>
    <!-- ... Your body content ... -->
    <main>
      <nav>
        <div class="flex-container">
          <div class="box">
            <!-- ... Your existing HTML content ... -->
@extends('layouts.app')
@section('content')
            <h1>HTML Easy Quiz</h1>

@foreach($htmlEasyQuestions as $question)
    <div>
        <p>{{ $question->question_text }}</p>
        <ul>
            <li>{{ $question->option_1 }}</li>
            <li>{{ $question->option_2 }}</li>
            <li>{{ $question->option_3 }}</li>
            <li>{{ $question->option_4 }}</li>
        </ul>
        <!-- You can add radio buttons or any other UI elements for user selection -->
    </div>
@endforeach

<!-- Your existing HTML content -->
@endsection




            <!-- ... Your existing HTML content ... -->
          </div>
        </div>
      </nav>
    </main>
    <!-- JavaScript -->
    <script src="{{ asset('assets/js/homejs.js') }}"></script>
  </body>
</html>
