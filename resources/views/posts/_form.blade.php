{!! Form::label('title', '標題') !!}
{!! Form::text('title', null,['class'=>'myclass','style'=>'color:red;','xx'=>'yy']) !!}<br>

@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

{!! Form::label('content', '內文') !!}
{!! Form::textarea('content', null,['cols'=>60,'rows'=>20]) !!}<br>

@error('content')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

{!! Form::hidden('mode', 1) !!}

{!! Form::label('status', '是否開啟') !!}

開啟{!! Form::radio('status', 1, true) !!}
關閉{!! Form::radio('status', 0, false) !!}
隨便{!! Form::radio('status', -1, false) !!}<br>

你的興趣?
{!! Form::label('interests[]', '打球') !!}
{!! Form::checkbox('interests[]', 'playball', false) !!}
{!! Form::label('interests[]', '電影') !!}
{!! Form::checkbox('interests[]', 'movie', false) !!}
{!! Form::label('interests[]', '電玩') !!}
{!! Form::checkbox('interests[]', 'game', false) !!}<br><br>

{!! Form::select('mode', $modes ,$mode, ['placeholder' => '請選擇商品模式']) !!}<br>

{!! Form::label('month', '月份', []) !!}
月份下拉
{!! Form::selectMonth('month', null, []) !!}<br><br>

{!! Form::label('number', '數字', []) !!}
區間數字下拉
{!! Form::selectRange('number', 1, 10, 5, []) !!}<br><br>

{!! Form::label('password', '數字', []) !!}
{!! Form::password('password') !!}<br><br>

{!! Form::label('email', '郵箱', []) !!}<br><br>
{!! Form::email('email',null) !!}

{!! Form::label('sell_at', '何時上架', []) !!}<br><br>
{!! Form::date('sell_at', null) !!}

{!! Form::label('age', '年紀', []) !!}<br><br>
{!! Form::number('age', 18, ['min'=>18 , 'max'=>80]) !!}

{!! Form::label('pic', '圖片上傳', []) !!}<br><br>
{!! Form::file('pic') !!}

{!! Form::submit('送出', []) !!}
{!! Form::reset('重置', []) !!}