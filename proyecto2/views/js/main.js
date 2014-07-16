var c;
   var k=0;
   var j=0;
   var ary=[];
   var divs=document.getElementsByTagName('div');
   var lnks=document.getElementsByTagName('a');
   var splt;

/**************************************************

function init is provided for those who have javascript disabled
and would, otherwise, not be able to view any of the divs at all.
They would also I presume not need the links that control the divs
so that will not show up.

***************************************************/
function init() {
for(c=0;c<divs.length;c++) {
  if(divs[c].className=='show') {
     divs[c].className='hide';
     divs[c].id='d'+k++;     
   }
  }
for(c=0;c<lnks.length;c++) {
if(lnks[c].className=='hide') {
   ary[c]=true;
   lnks[c].className='hs';
   lnks[c].id='a'+j++;
   lnks[c].onclick=function() {
   splt=this.id.split('a')[1];
if(ary[splt]==true) {
   this.firstChild.nodeValue='hide';
   ary[splt]=false;
   showDiv(splt);
   return false;
     }
else {
   this.firstChild.nodeValue='show';
   ary[splt]=true;

document.getElementById('d'+splt).className='hide';
   return false;
     }
    }
   }
  }
 }

function showDiv(num) {
for(c=0;c<j;c++){
   document.getElementById('a'+c).firstChild.nodeValue='show';
   document.getElementById('a'+num).firstChild.nodeValue='hide';
   ary[c]=true;
   ary[num]=false;
 }
for(c=0;c<divs.length;c++) {  
  if(divs[c].className=='show') {
     divs[c].className='hide';
  }
 }
document.getElementById('d'+num).className='show';
 }

window.onload=function() {
   init();
 }