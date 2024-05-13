@extends('layout.public_master')

@section('content')
 <!-- ======= service Section ======= -->   
<section id="services" class="services" style="height: 100vh;">
  
  <div class="wrapper">
      
      <div class="qr-code">
      <img src="{{ asset('users/assets/img/team/qr1.png') }}" alt="qr-code">
      </div>
  </div>
</section>
@endsection

@push('styles')
<style>
  /* Import Google Font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

.wrapper{
  height: 265px;
  max-width: 410px;
  background: #fff;
  border-radius: 7px;
  padding: 20px 25px 0;
  transition: height 0.2s ease;
  box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}
.wrapper.active{
  height: 530px;
}



.qr-code{
  opacity: 0;
  display: flex;
  padding: 33px 0;
  border-radius: 5px;
  align-items: center;
  pointer-events: none;
  justify-content: center;
  border: 1px solid #ccc;
}
.wrapper.active .qr-code{
  opacity: 1;
  pointer-events: auto;
  transition: opacity 0.5s 0.05s ease;
}
.qr-code img{
  width: 170px;
}

@media (max-width: 430px){
  .wrapper{
    height: 255px;
    padding: 16px 20px;
  }
  .wrapper.active{
    height: 510px;
  }
  header p{
    color: #696969;
  }
  .form :where(input, button){
    height: 52px;
  }
  .qr-code img{
    width: 160px;
  }  
}
</style>
@endpush
