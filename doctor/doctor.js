
	temp = 0;

	storeRight=document.getElementsByClassName('right');

	storeLeft=document.getElementsByClassName('left');
	console.log("1");


	function toggle()
	{
		if (temp==0) 
		{	
			temp=1;

			document.getElementById('sidemenu').style="left:0px;";
	console.log("2");


			for(i=0;i<storeLeft.length;i++)
			{
				storeLeft[i].style="visibility:visible;";
				storeRight[i].style="visibility:hidden;";
	console.log("3");

			}

		}

		else

		{
			
			document.getElementById('sidemenu').style="left:-200px;";

	console.log("4");


			for(i=0;i<storeLeft.length;i++)
			
			{
				storeLeft[i].style="visibility:hidden;";

				storeRight[i].style="visibility:visible;";

				console.log("5");

				
			}

			storeRight[0].style="margin-left:91px;";
			storeRight[1].style="margin-left: 87px;";
			storeRight[2].style="margin-left: 77px;";
			storeRight[3].style="margin-left: 32px;";
			storeRight[4].style="margin-left: 74px;";

			temp=0;
		}	

	}