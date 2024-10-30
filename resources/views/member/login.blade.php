<form method="POST" action="{{ route('member.login')}}">
    @csrf
    <input type="email" name="email" required autofocus>
    <input type="password" name="password" required>
    <button type="submit"> Login </button>
</form>