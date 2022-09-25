#static_header_banner{
	  display:block;
	  height:50vh;
	  background-color: #282E34;
	  position:relative;
	  z-index:1;	
  }
  #static_header_banner:before{
	  content: "";
	  position: absolute;
	  left: 0px;
	  right: 0px;
	  top: 0px;
	  bottom: 0px;
	  background: rgba(0,0,0,0.5);
	  z-index: -1;
  }
  #static_header_banner .content-text{
	  display: flex;
	  align-items: center;
	  justify-content: center;
	  height:100%;
	  color: var(--quaternary-color);
	  overflow: hidden;
	  position: relative;
  }
  
  .owl-item {
	  float:left;	
  }
  #be-home-slider{
	  overflow:hidden;	
  }
  
  .table-striped > tbody > tr:nth-of-type(odd) > * {
	  --bs-table-accent-bg: var(--gray-color);
  }
  
  .owl-item.active .slideUp{
		animation-name: slideUp;
	  animation-duration:1.5s;
	  animation-timing-function: ease;
	  
  }
  @keyframes slideUp {
	  100% {
		  -webkit-transform: translateY(0%);
		  opacity:1;
	  }
	  0% {
		  -webkit-transform: translateY(50%);
		  opacity:0;
	  }
  }
  @-webkit-keyframes slideUp {
	  
	  100% {
		  -webkit-transform: translateY(0%);
		  opacity:1;
	  }
	  0% {
		  -webkit-transform: translateY(50%);
		  opacity:0;
	  }	
  }
