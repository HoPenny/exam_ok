<h1>表單建立頁面</h1>

{!! Form::open(['url'=>url('posts'),'method'=>'POST','files'=>true]) !!}

@include('posts._form')

{!! Form::close() !!}

@include('posts._error')

