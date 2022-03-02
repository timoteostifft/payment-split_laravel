<header>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</header>

<div id="participantsPage">
    <button id="homeButton">
      <a href="http://127.0.0.1:8000/home/">RETURN</a>
    </button>
    
    <h3>PAYMENT SPLIT</h3>

  <div id="participantsPageHeader">
    <h5>PARTICIPANTS FROM {{$companyName}}</h5>
    <button onclick="handleChangeParticipantFormVisibility()" id="handleParticipantForm">ADD</button>
  </div>
  
  <div id="participantsForm" style="display: none">
    @include('participants.add')
  </div>
</div>

<script>
  function handleChangeParticipantFormVisibility(){
    var participantForm = document.getElementById('participantsForm')
      
    if (participantForm.style.display === 'none'){
      participantForm.style.display = 'block';
      document.getElementById('handleParticipantForm').innerHTML = 'CLOSE'
    } else {
      participantForm.style.display = 'none';
      document.getElementById('handleParticipantForm').innerHTML = 'ADD'
    }
  }
</script>