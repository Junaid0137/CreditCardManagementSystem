function checkInp()
{
const number = document.querySelector('#cardnum')
  var x= parseInt(number.value)
  if (isNaN(x)) 
  {
    alert("Must input numbers");
  
  }
}

const cardno = document.querySelector('#cardno')
cardno.addEventListener('mouseleave', (e) => {
    checkInp
})