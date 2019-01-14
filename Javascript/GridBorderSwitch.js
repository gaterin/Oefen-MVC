var borderBool = false;
function GridBorderSwitch()
{
  var cols = "";
  for (var i = 1; i < 13; i++)
  {
    if (i==12)
    {
      cols += ".col-"+i+":not(td):not(li):not(input)";
      break;
    }
    cols += ".col-"+i+":not(td):not(li):not(input), ";
  }
  var x = document.querySelectorAll(cols);
  if (borderBool === true)
  {
    for (i = 0; i < x.length; i++)
    {
      x[i].style.border = "0px solid white";
    }
    borderBool = false;
  }
  else
  {
    for (i = 0; i < x.length; i++)
    {
      x[i].style.border = "1px solid blue";
    }
    borderBool = true;
  }
}
