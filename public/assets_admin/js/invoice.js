function printInvoice(){
    // window.print();
    var mywindow = window.open('', 'PRINT', 'height=400,width=600');

    mywindow.document.write('<html>');
    mywindow.document.write('<body>');
    mywindow.document.write(document.getElementById('print-area').innerHTML);
    mywindow.document.write('</body></html>');
    
    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/

    mywindow.print();
    mywindow.close();

    return true;
    // window.frames["print_frame"].document.body.innerHTML = document.getElementByIdI('print-area').innerHTML;
    // window.frames["print_frame"].window.focus();
    // window.frames["print_frame"].window.print();
}

// function downloadPDF() {
//     // Create a Blob with the PDF data (replace 'your-pdf-file.pdf' with the actual file path)
//     fetch('your-pdf-file.pdf')
//       .then(response => response.blob())
//       .then(blob => {
//         // Create a temporary URL for the Blob
//         const url = window.URL.createObjectURL(blob);

//         // Create an invisible <a> element and set its attributes
//         const a = document.createElement('a');
//         a.style.display = 'none';
//         a.href = url;
//         a.download = 'downloaded-pdf.pdf'; // You can set the downloaded file name

//         // Append the <a> element to the document and simulate a click
//         document.body.appendChild(a);
//         a.click();

//         // Remove the <a> element and release the Blob URL
//         document.body.removeChild(a);
//         window.URL.revokeObjectURL(url);
//       })
//       .catch(error => {
//         console.error('Error downloading PDF:', error);
//       });
//   }

