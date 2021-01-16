#Clone repository ke folder Xamp
1. Buka cmd dengan perintah "Windows + R" lalu ketik 
		
		cmd

2. Pada _Command Promt_ ketik

		cd C:\xampp\htdocs

3. lalu tuliskan perintah **dibawah berikut** untuk mengambil repository Public yang di posting di Github dengan melihat pada tombol _code_ warna Hijau kanan atas sebagai referensi link clone nya

		git clone https://github.com/Ranur-react/HASIAN-E-LEARNING.git

-->pastikan sudah berada pada folder htdoc pada xamp sesuai intruksi nomor 2

##Tutorial Uplod ke Github

1. Inisiai user

		git config --global user.name "Ranur-react"
		git config --global user.email "rahmatnur845@gmail.com"



1. Cek kondisi status perubahan Prj.

		git status
   
	Ket: -Jika merah berarti ada yang belum di simpan ke Repository Lokal
		-Jika Hijau berarti ada yang sudash di simpan ke Repository Lokal namun belum "git commit -m "Nama pekerjaan"

2. simpan semua perubahan ke dalam List Repository  Lokal

	untuk menambah file tunggal
		
		git add /namafolder/file.extensi
	
Untuk semua File tanpa terkecuali (pastikan  di Path / Posisi dari Project) "Termasuk tanda (.) titik"
			
		git add .  				

3. Beri nama semua aksi yang telah dilakukan, agar dapat diteruskan ke Github.
		
		git commit -m "Nama aksi yang dilakukan"

4. cara Upload Prj ke Git
		
		git push

ket: Jika ada eror command lakukan intrukisi seperti yang dimunculkan eror itu

5. cara Download/sincron kan Prj
			
		git fetch
		git pull
-----------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------
**Jika Kurang Paham sebaiknya gunakan printah-perintah ini saja di cmd dari path/posisi terluar dari project**

#Inisiai user

	git config --global user.name "Ranur-react"
	git config --global user.email "rahmatnur845@gmail.com"

#Upload Project

	git status
	git add .
	git commit -m "Nama aksi yang dilakukan"
	git push


#Update Project

	git pull