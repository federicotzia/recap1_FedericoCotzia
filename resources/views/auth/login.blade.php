<x-layout>
<form method="POST" action="{{route('login')}}"> > 
@csrf
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control"  name="email" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</x-layout>