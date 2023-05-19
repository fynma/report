const canvas = document.getElementById('canvas-ttd');
const ctx = canvas.getContext('2d');
ctx.fillStyle = '#fff';
ctx.strokeStyle = '#000';
ctx.lineWidth = 4;
ctx.lineCap = 'round';

let isDrawing = false;
let lastX = 0;
let lastY = 0;
let dataUrl = '';

canvas.addEventListener('mousedown', startDrawing);
canvas.addEventListener('mousemove', draw);
canvas.addEventListener('mouseup', endDrawing);
canvas.addEventListener('mouseout', endDrawing);
canvas.addEventListener('touchstart', startDrawing);
canvas.addEventListener('touchmove', draw);
canvas.addEventListener('touchend', endDrawing);

function startDrawing(e) {
 isDrawing = true;
 if (e.type === 'mousedown') {
   [lastX, lastY] = [e.offsetX, e.offsetY];
 } else if (e.type === 'touchstart') {
   const touchPos = getTouchPos(canvas, e);
   [lastX, lastY] = [touchPos.x, touchPos.y];
 }
}

function draw(e) {
 if (!isDrawing) return;
 e.preventDefault();
 if (e.type === 'mousemove' || e.type === 'mousedown') {
   ctx.beginPath();
   ctx.moveTo(lastX, lastY);
   ctx.lineTo(e.offsetX, e.offsetY);
   ctx.stroke();
   [lastX, lastY] = [e.offsetX, e.offsetY];
 } else if (e.type === 'touchmove' || e.type === 'touchstart') {
   const touchPos = getTouchPos(canvas, e);
   const currentX = touchPos.x;
   const currentY = touchPos.y;
   const dx = currentX - lastX;
   const dy = currentY - lastY;
   const distance = Math.sqrt(dx*dx + dy*dy);
   if (distance >= 1) {
     ctx.beginPath();
     ctx.moveTo(lastX, lastY);
     ctx.lineTo(currentX, currentY);
     ctx.stroke();
     [lastX, lastY] = [currentX, currentY];
   }
 }
 dataUrl = canvas.toDataURL();
}


function getTouchPos(canvas, touchEvent) {
 const rect = canvas.getBoundingClientRect();
 const touch = touchEvent.targetTouches[0];
 const x = touch.clientX - rect.left;
 const y = touch.clientY - rect.top;
 return {x, y};
}

//  function startDrawing(e) {
//    isDrawing = true;
//    [lastX, lastY] = [e.offsetX, e.offsetY];
//  }

//  function draw(e) {
//    if (!isDrawing) return;
//    ctx.beginPath();
//    ctx.moveTo(lastX, lastY);
//    ctx.lineTo(e.offsetX, e.offsetY);
//    ctx.stroke();
//    [lastX, lastY] = [e.offsetX, e.offsetY];
//    dataUrl = canvas.toDataURL();
//  }

function endDrawing() {
  isDrawing = false;
  document.getElementById('sig_staff').value = dataUrl;
}

   document.getElementById("clear").addEventListener('click', function(){
       signaturePad.clear();
   });


   var hapusTandaTanganBtn = document.getElementById('clear');


   hapusTandaTanganBtn.addEventListener('click', function() {

   var canvas = document.getElementById('canvas-ttd');
   var ctx = canvas.getContext('2d');
   ctx.fillStyle = '#FFFFFF';
   ctx.fillRect(0, 0, canvas.width, canvas.height);

   var tandaTanganInput = document.getElementById('sig_staff');
   tandaTanganInput.value = '';
   });

   document.querySelector('form').addEventListener('submit', (e) => {
 const dataUrl = canvas.toDataURL();
 const signatureInput = document.getElementById('sig_staff');
 signatureInput.value = dataUrl;
});