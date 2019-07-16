$(function(){
	var items,
	 resultBlock = document.getElementById('body-table-data'),
	 prices;
	 
	 async function getData(){
		 
		 const firstResponse = await fetch("https://min-api.cryptocompare.com/data/pricemultifull?fsyms=LNC,LRC,LBT,LUN,MCAP,MCO,MDA,MNE,MSP,MTH,MTL,MTX,MYST,NET,NMR,NXX,OAX,OPT,PAY,PIX,PLAY,PLBT,PLR,PLU,POE,POS,PRO,PTOY,QAU,BAT,RLT,RLX,RVT,SALT,SCL,SENSE,LSK,SKIN,SNC,SNGLS,SND,SNM,SNT,NEO,ONT,STX,SUB,SWT,TAAS,TBT,TFL,XVG,TIME,TIX,TKN,TNT,TRST,VERI,VIBE,VIB,VIU,VRS,VSL,VSM,WIC,WINGS,WAVES,XAUR,XID,XNN,XRL,BCPT,BIX,R,GTO,XEM,SRN,OCN,ELF,GVT,EVX,TNB,RUFF,AMB,BTM,THETA,POLY,APPC,JNT,QUN,NAS,DTA,SXUT,LEND,POWR,ITC,RCN,ENJ,RDN,MTN,REQ,WPR,DLT,GNX,ST,AST,CMT,AIDOC,YOYOW,NULS,MOD,UKG,BRD,GTC,BKX,MDS,CND,ENG,DPY,C20,LEV,ATM,STORM,MOF,QSP,QASH,SPHTX,CS,DRGN,ETHOS,DCN,NOW&tsyms=USD");
		 const dataInfo = await firstResponse.json();
		 const secondResponse = await fetch("assets.js");
		 const dataNames = await secondResponse.json();
		 
		 
		const test = fetch('https://demoapi-online.robo-med.com/webapi3/api/v3/publicInfo/getDoctors')  
		  .then(  
			function(response) {  
			  if (response.status !== 200) {  
				console.log('Looks like there was a problem. Status Code: ' +  
				  response.status);  
				return;  
			  }

			  // Examine the text in the response  
			  response.json().then(function(data) {  
				console.log(data);  
			  });  
			}  
		  )  
		  .catch(function(err) {  
			console.log('Fetch Error :-S', err);  
		  });
		 
		 
		 
		 prices = dataInfo.DISPLAY;
		 items = dataNames;
	
		 console.log(prices);
		 $.each(prices,function(key,val){
			 $.each(items,function(k,item){
				 if(key == item.name){
					 item.price = val.USD.PRICE;
					 item.volume = val.USD.TOTALVOLUME24HTO;
					 item.cap = val.USD.MKTCAP;
					 item.change = val.USD.CHANGEPCT24HOUR; 
				 }
				 
				 
			 })
			 
		 })
		 
		 console.log(prices);
		
		 renderList(items,resultBlock);
	 }
		
		
	 getData();
	  
	  function filter(val,list){
					return list.filter(i=>(~i.fullName.indexOf(val)))
	  };
	  
	  
	  
	  function renderList(list=[],el=document.body){
			  
								var count = 0;
								el.innerHTML='';
							  list.forEach( i =>{
								count++;
								
								var new_el = document.createElement('tr'),
									price,
									volume,
									cap,
									change,
									class_Type;
									
									if( typeof(i.coinType) !== 'undefined'){
										class_Type = i.coinType;
									}else{
										class_Type = '';
									}
								new_el.setAttribute('class',i.coinType);
								
								
								if(typeof i.price !== 'undefined'){
									price = i.price;
								}else{
									price = '';
								}
								
								if(typeof i.volume !== 'undefined'){
									volume = i.volume;
								}else{
									volume = '';
								}
								
								if(typeof i.price !== 'undefined'){
									cap = i.cap;
								}else{
									cap = '';
								}
								
								if(typeof i.change !== 'undefined'){
									change = i.change;
								}else{
									change = '';
								}
								
								
								var buyLink = `https://atomicwallet.io/buy-${i.fullName.toLowerCase()}`;
								var imgSrc =  `css/images/crypto-icon/${i.iconName}`;
								
							  new_el.innerHTML = `<td>${count}.<span><img src="${imgSrc}"></span><a target="_blank" href="${i.coinLink}">${i.fullName}</a> (${i.name})</td>  
								                    <td>${cap}</td>
													<td><a href="${i.coinPriceLink}">${price}</a></td>  
													<td>${volume}</td> 
													<td>${change} &nbsp %</td> 
													<td><div class="actions-button">
														<a class = "get-w" href="${i.coinLink}">Get Wallet</a>
														<a class = "buy-btn" href="${buyLink}">Buy</a>
														</div>
													</td>`
							
								el.appendChild(new_el)
							  })
							removePreloader();			
						
	}
	
	
	function removePreloader(){
		$('#list-table-preloader').remove();
	}
			
	
			
		
		 
	document.getElementById('search').addEventListener('input',e=>renderList(filter(e.target.value,items),resultBlock));
	
				$('.input-wrapper input').keyup(function(e){
					let code = e.keyCode;
					if(code === 8){
						if( $('.input-wrapper input').val() == ''){
							$('.input-wrapper').find('i').removeClass('fa-times').addClass('fa-search').removeClass('clear-search');
						}
					}
					
					else if($('.input-wrapper').val().length >= 0){
						$('.input-wrapper').find('i').removeClass('fa-search').addClass('fa-times').addClass('clear-search');
						
							$('.clear-search').click(function(){
							
								$('.input-wrapper input').val('');
								$('.input-wrapper').find('i').removeClass('fa-times').addClass('fa-search').removeClass('clear-search');
								renderList(items,resultBlock);
							
							})
					}else{
						$('.input-wrapper').find('i').removeClass('fa-times').addClass('fa-search').removeClass('clear-search');
					}
		
				})
	
	
})