<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form method="POST" action="{{ route('register') }}">
    @csrf

    <label for="name">Name:</label>
    <input type="text" id="name" name="name">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email">

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">

    <button type="submit">Register</button>
</form>


</body>
</html>
