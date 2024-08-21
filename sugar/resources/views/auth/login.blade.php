<form method="post">
    @csrf
    <label>이메일</label><br />
    <input type="text" name="email" /><br />
    <label>비밀번호</label><br />
    <input type="password" name="password" /><br />
    <input type="submit" value="로그인 "/>
    @if($errors->any())
        <p><strong>{{$errors->first()}}</strong></p>
    @endif
</form>
