
	temp = 0;

	storeRight=document.getElementsByClassName('right');

	storeLeft=document.getElementsByClassName('left');


	function toggle()
	{
		if (temp==0) 
		{	
			temp=1;
			document.getElementById('sidemenu').style="left:0px;";

			for(i=0;i<storeLeft.length;i++)
			{
				storeLeft[i].style="visibility:visible;";
				storeRight[i].style="visibility:hidden;";
				console.log("if")
			}

		}

		else

		{
			
			document.getElementById('sidemenu').style="left:-200px;";

			for(i=0;i<storeLeft.length;i++)
			
			{
				storeLeft[i].style="visibility:hidden;";

				storeRight[i].style="visibility:visible;";

				
			}

			storeRight[0].style="margin-left:91px;";
			storeRight[1].style="margin-left: 74px;";

			temp=0;
		}	

	}