$(function(){
	var items,
	 resultBlock = document.getElementById('body-table-data'),
	 prices,
	 additionals;
	 
	 async function getData(){
		 



		 const stringTicket = 'BTC,XRP,ETH,BCH,XLM,EOS,LTC,USDT,ADA,XMR,BSV,TRX,DASH,BNB,ETC,NEO,ONT,XTZ,ZEC,XVG,WAVES,BTG,VET,LSK,MKR,OMG,MGO,DOGE,ZRX,DCR,QTUM,AE,ZIL,BCD,DGB,NPXS,PMA,MITH,TUSD,GUSD,AWC,USDC,PPT,PAX,REP,GNT,HOT,IOST,WAX,BZNT,DGTX,MANA,WTC,NEXO,BNT,TPAY,BTT,DAI,VTHO,SMART,EURS,ABYSS,MXM,XYO,ODE,1ST,300,ADST,ADT,ADX,AIR,ALIS,AMIS,ANT,APT,ARC,ARN,ART,ATH,IOTX,ATL,AVT,BCDN,BET,BLX,BMC,BMT,BNC,BRAT,BQX,BTE,CAG,CAT,CCC,CDT,CFI,CMC,COB,CRB,CREDO,CVC,DATA,DDF,DENT,DICE,DNT,DRP,EDG,ELIX,EURT,FRD,FUEL,FUN,GBT,GNO,GUP,HGT,HST,ICE,ICN,ICOS,IFT,IND,IXT,JET,KICK,KIN,KNC,RFR,LATX,LIFE,LINK,LNC,LRC,LUN,MCAP,MCO,MDA,MNE,MSP,MTH,MTX,MYST,NET,NMR,NXX,OAX,OPT,PAY,PIX,PLAY,PLBT,PLR,PLU,POE,POS,PRO,PTOY,QAU,BAT,RLT,RLX,RVT,SALT,SCL,SENSE,SKIN,SNC,SNGLS,SND,SNM,SNT,STX,SUB,SWT,TaaS,TBT,TFL,TIME,TIX,TKN,TNT,TRST,VERI,VIBE,VIB,VIU,VRS,VSL,WiC,WINGS,WOLK,XAUR,XID,XNN,XRL,BCPT,BIX,R,GTO,SRN,OCN,ELF,GVT,EVX,TNB,RUFF,AMB,THETA,POLY,APPC,JNT,QUN,NAS,DTA,SXUT,LEND,POWR,ITC,RCN,ENJ,RDN,MTN,REQ,WPR,DLT,GNX,AST,CMT,AIDOC,YOYOW,NULS';	
		 const firstResponse = await fetch("https://min-api.cryptocompare.com/data/pricemultifull?fsyms="+stringTicket+"&tsyms=USD");
		 const dataInfo = await firstResponse.json();
		 const secondResponse = await fetch("../assets.js");
		 const dataNames = await secondResponse.json();
		 const thirdResponse = await fetch("https://min-api.cryptocompare.com/data/pricemultifull?fsyms=MOD,UKG,BRD,GTC,BKX,MDS,CND,ENG,DPY,C20,LEV,ATM,STORM,MOF,QSP,QASH,CS,DRGN,ETHOS,DCN,NOW&tsyms=USD");
		 const thirdInfo = await thirdResponse.json();
		 
		 
		
		 
		 
		 
		 prices = dataInfo.DISPLAY;
		 items = dataNames;
		 additionals = thirdInfo.DISPLAY;


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
		 
		 $.each(additionals,function(ke_y,value){
			$.each(items,function(k,i){
				if(ke_y == i.name){
					console.log(ke_y);
					i.price = value.USD.PRICE;
					i.volume = value.USD.TOTALVOLUME24HTO;
					i.cap = value.USD.MKTCAP;
					i.change = value.USD.CHANGEPCT24HOUR; 
				}
				
				
			})
			
		})
	
		
		 renderList(items,resultBlock);
	 }
		
		
	 getData();
	  
	  function filterByName(val,list){
					
					return list.filter( i => (~i.fullName.toLowerCase().indexOf(val)) || (~i.name.toLowerCase().indexOf(val)) );
					
				
	  };


	  
	  jQuery.fn.cleanWhitespace = function() {
		this.contents().filter(
			function() { return (this.nodeType == 3 && !/\S/.test(this.nodeValue)); })
			.remove();
		return this;
	}
	  
	  function renderList(list=[],el=document.body){
			  
								
								el.innerHTML='';
							  list.forEach( i =>{
								var new_el = document.createElement('tr'),
									price,
									volume,
									cap,
									change,
									symbol,
									classChange;
								
								
								
								if(typeof i.price !== 'undefined'){
									price = i.price.slice(2);
							
								}else{
									price = '';
								}
								
								if(typeof i.volume !== 'undefined'){
									volume = i.volume.slice(2);
								}else{
									volume = '';
								}
								
								if(typeof i.price !== 'undefined'){
									cap = i.cap.slice(2);
								}else{
									cap = '';
								}
								
								if(typeof i.change !== 'undefined'){
									change = i.change;
								}else{
									change = '';
								}
								

								if(change > 0){
									symbol = '+';
									classChange = 'up';
								}else{
									
									symbol = '';
									classChange = 'down';
								}
								
								var iconName =  i.name.toLowerCase();




								
							  new_el.innerHTML = `<td><span class="icon-wrap-crypto"><i class="icon icon-${iconName}"></i></span><span class="full-name-td">${i.fullName}&nbsp;</span><span class="ticker">${i.name}</span></td>  
							  <td class="price-td"><span>$${price}</span></td>
							  <td class="${classChange}">${symbol}${change}%</td>  
								<td>$${cap}</td>
							  <td>$${volume}</td>
							  <!--td><svg width="216" height="53" viewBox="0 0 216 53" fill="none" xmlns="http://www.w3.org/2000/svg">
							  <path d="M1 10.7111C2.54466 11.8 7.22155 13.3426 9.36692 13.9778L14.5158 10.7111L19.6647 13.9778L24.1699 10.7111L27.7098 18.0611L36.3985 6.35556L40.582 10.7111H45.7308L51.5233 25.1389L56.994 21.6L60.212 25.1389H68.2571L72.4406 18.0611L77.9113 21.6L83.7038 19.6944L88.209 21.6L90.7835 25.6833L101.725 28.4056L105.265 35.7556L110.092 40.1111L112.988 48.2778L118.137 51L122.642 40.9278L126.826 46.1L131.653 43.3778L137.123 46.1L143.559 38.4778L147.421 32.4889L150.961 15.0667L154.501 12.3444L158.684 13.9778H163.511L166.086 16.4278L171.235 9.07778L179.923 4.99444L184.107 8.26111L187.647 6.35556L191.186 9.07778L197.944 2L204.059 9.07778L209.208 6.35556L215 9.07778" stroke="#2FA6FA" stroke-width="2"/>
							  </svg>
							  </td--> 
							  <td><div class="actions-button">
								  <a class="get-w" href="${i.coinLink}">Get Wallet</a>
								  </div>
							  </td>
							  
								<a class="clickable_zone" target="_blank" href="https://atomicwallet.io/${i.fullName.toLowerCase()}-price"></a>
							 
							  `
							
								el.appendChild(new_el);
								
							
							  })
							removePreloader();			
						
	}
	
	
	function removePreloader(){
		$('#list-table-preloader').remove();
	}


			

	
	
			
		
		 
	document.getElementById('search').addEventListener('input',e=>renderList(filterByName(e.target.value.toLowerCase(),items),resultBlock));
	
	
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