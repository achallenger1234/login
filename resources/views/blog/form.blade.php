@extends('layout')
@section('title', 'ブログ投稿')
@section('content')


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css" rel="stylesheet">
</head>

    <div class="max-w-2xl bg-white py-10 px-5 m-auto w-full mt-10">

  <div class="text-3xl mb-6 text-center ">
投稿フォーム
  </div>
  <form method="POST" action="{{ route('store') }}" onSubmit="return checkSubmit()">
        @csrf

     <div class="grid grid-cols-2 gap-4 max-w-xl m-auto">

     <div class="col-span-2">
       <input type="text"
              class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="タイトル"
       　　　  id="title"
              name="title"
              value="{{ old('title') }}"/>
         @if ($errors->has('title'))
             <div class="text-danger">
                 {{ $errors->first('title') }}
             </div>
         @endif
     </div>

     <div class="col-span-2">
       <textarea
       id="content"
     　name="content"
       cols="30" rows="8" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="本文">{{ old('content') }}</textarea>
       @if ($errors->has('content'))
          <div class="text-danger">
              {{ $errors->first('content') }}
          </div>
     　@endif
     </div>

     <div class="col-span-2 text-right">
       <button   href="{{ route('blogs') }}" class="py-3 px-6 bg-green-500 text-white font-bold w-full sm:w-32">
         キャンセル
       </button>
     </div>
     <div class="col-span-2 text-right">
       <button type="submit" class="py-3 px-6 bg-green-500 text-white font-bold w-full sm:w-32">
         投稿
       </button>
     </div>
     </form>

  </div>
</div>



<!-- 
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>ブログ投稿フォーム</h2>
        <form method="POST" action="{{ route('store') }}" onSubmit="return checkSubmit()">
        @csrf
            <div class="form-group">
                <label for="title">
                    タイトル
                </label>
                <input
                    id="title"
                    name="title"
                    class="form-control"
                    value="{{ old('title') }}"
                    type="text"
                >
                @if ($errors->has('title'))
                    <div class="text-danger">
                        {{ $errors->first('title') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="content">
                    本文
                </label>
                <textarea
                    id="content"
                    name="content"
                    class="form-control"
                    rows="4"
                >{{ old('content') }}</textarea>
                @if ($errors->has('content'))
                    <div class="text-danger">
                        {{ $errors->first('content') }}
                    </div>
                @endif
            </div>
            <div class="mt-5">
                <a class="btn btn-secondary" href="{{ route('blogs') }}">
                    キャンセル
                </a>
                <button type="submit" class="btn btn-primary">
                    投稿する
                </button>
            </div>
        </form>
    </div>
</div> -->
<script>
function checkSubmit(){
if(window.confirm('送信してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection