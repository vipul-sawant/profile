function valid()
{
	var a,b,c,d,e,f,g;

	a = document.getElementById('name');
	b = document.getElementById('age');
	c = document.getElementById('contact');
	d = document.getElementById('address');
	e = document.getElementById('class');
	f = document.getElementById('sports');

	if (a.value.trim() == '')
		{
			a.focus();
			alert('Name cannot be empty !');
			return false;
		}

		else if (b.value.trim() == '' || b.value <= 0)
			 {
			 	b.focus();
			 	alert('Age cannot be empty ! and less than or equal to zero');
			 	return false;
			 }

			 else if (c.value.trim() == '' || c.value.length != 10)
			      {
			          c.focus();
			 	      alert('Contact number must be 10 digits and must be numbers only');
			 	      return false;
			      }

			      else if (d.value.trim() == '')
			      	   {
			      	   	   d.focus();
			 	           alert('Address cannot be empty !');
			 	           return false;
			      	   }

			      	   else if (e.value.trim() == '')
			      	        {
			      	        	e.focus();
			 	                alert('Qualification field cannot be empty !');
			 	                return false;
			      	        }
			      	        
			      	        else if (f.value.trim() == '')
			      	             {
			      	        	     f.focus();
			 	                     alert('Plaease enter sports you play it cannot be empty !');
			 	                     return false;
			      	             }

		                            else
		                            {
		                            	return true;
		                            }

}