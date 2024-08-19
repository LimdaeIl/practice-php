1. 내용 작성.

<p>{{ $name }}</p>  {{-- 일반적인 경우--}}
<p>{!! $name !!}</p>  {{-- 특별한 경우에 사용 --}}
<p>@{{ $name }}</p> {{-- 문자 그대로 출력하는 경우--}}

<p>지금은 {{ now() }} 입니다. </p> {{-- 내장 함수 바로 출력--}}

{-- 반복문 사용하기 --}}
@for ($i = 0; $i < 10; $i++)
    숫자가 증가합니다. {{ $i }} <br>
@endfor

{{--@include('sub.inc') --}}{{-- blade.php 파일 삽입하기 --}}

@include('sub.inc') {{-- sub/blade.php 파일 삽입하기 @include('sub/inc') @include('sub\inc') 가능합니다.  --}}
@includeIf('sub.inc고의에러') {{-- 있으면 Include, 없으면 무시한다.  --}}

{{--php 코드 작성하기 --}}
@php
  $a = 10;
  $a++;
  echo '<p>a의 값은 ? '. $a .'입니다.</p>';
@endphp
