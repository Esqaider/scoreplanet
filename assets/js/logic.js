var setL = document.getElementById('left'),
    setR = document.getElementById('right'); 

setL.addEventListener('click', onSetElemClick);
setR.addEventListener('click', onSetElemClick);
setL.addEventListener('click', onSetElemClickCenter);
setR.addEventListener('click', onSetElemClickCenter);

function onSetElemClick(e) {
    switch (e.target.parentElement.parentElement.parentElement.parentElement.id) {
      case 'left' : setR.appendChild(e.target.parentElement.parentElement.parentElement); 
                    break; 
      case 'right': setL.appendChild(e.target.parentElement.parentElement.parentElement); 
    }
  }

  function onSetElemClickCenter(e) {
    switch (e.target.parentElement.parentElement.parentElement.parentElement.parentElement.id) {
      case 'left' : setR.appendChild(e.target.parentElement.parentElement.parentElement.parentElement); 
                    break; 
      case 'right': setL.appendChild(e.target.parentElement.parentElement.parentElement.parentElement); 
    }
  }