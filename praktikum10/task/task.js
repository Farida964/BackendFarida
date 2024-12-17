/**
 * Fungsi untuk menampilkan hasil download
 * @param {string} result - Nama file yang didownload
 */

const showDownload = (result) => {
  console.log("Download selesai");
  console.log(`Hasil Download : ${result}`); 
};

const download = () => {
  return new Promise((resolve) => { 
    setTimeout(() => { 
      const result = "windows-10.exe";
      resolve(result); 
    }, 3000); 
  });
};

const initiateDownload = async () => {
  try {
    const result = await download();
    showDownload(result);
  } catch (error) {
    console.error(`Error during download: ${error}`); 
  }
}

initiateDownload();