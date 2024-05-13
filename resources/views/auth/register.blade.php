<x-layout>
<form method="POST" action="{{route('register')}}"> 
    @csrf
<div class="form-group">
    <label>Nome</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control"  name="email">
    
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="form-group">
    <label>Conferma password</label>
    <input type="password" class="form-control" name="password_confirmation">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</x-layout>