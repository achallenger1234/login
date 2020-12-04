@extends('layout')
@section('title', 'ブログ一覧')
@section('content')

<div class="text-gray-900 bg-gray-200　w-full">
    <div class="p-4 flex">
        <h1 class="text-3xl">
            MY ブログ
        </h1>
        @if (session('err_msg'))
      <p class="text-danger">
      {{session('err_msg') }}
      </p>
      @endif
    </div>
    <div class=" w-full px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-center p-3 px-5">記事番号</th>
                    <th class="text-center p-3 px-5">タイトル</th>
                    <!-- <th class="text-center p-3 px-5">日付</th> -->
                    <th></th>
                    <th></th>
                </tr>
                @foreach($blogs as $blog)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5 text-center"><input type="text" class="bg-transparent">{{ $blog->id  }}</td>
                    <td class="p-3 px-5 text-center"><input type="text" class="bg-transparent"><a href="/blog/{{ $blog->id  }}">{{ $blog->title  }}</a></td>
                    <!-- <td>{{ $blog->updated_at  }}</td> -->
                    <td><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline" onclick="location.href='/blog/edit/{{  $blog->id  }}'">編集</button></td>
                    <form method="POST" action="{{ route('delete', $blog->id) }}" onSubmit="return checkDelete()" onclick=>
                 @csrf
                    <td class="p-3 px-5 flex justify-end"><button type="submit" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline" onclick=>削除</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
function checkDelete(){
if(window.confirm('削除してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection