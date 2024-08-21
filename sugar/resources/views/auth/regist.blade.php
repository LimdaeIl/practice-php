<form method="post">
    @csrf
    <label>이름</label><br/>
    <input type="text" name="name" /><br/>
    <label>이메일</label><br/>
    <input type="text" name="email" /><br/>
    <label>비밀번호</label><br/>
    <input type="password" name="password" /><br/>
    <input type="submit" value="회원가입" />
</form>
