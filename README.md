#Tutorial Uplod ke Github

1. Inisiai user

	git config --global user.name "Ranur-react"
	git config --global user.email "rahmatnur845@gmail.com"



1. Cek kondisi status perubahan Prj.

			git status
   
Ket: -Jika merah berarti ada yang belum di simpan ke Repository Lokal
	-Jika Hijau berarti ada yang sudash di simpan ke Repository Lokal namun belum "git commit -m "Nama pekerjaan"

2. simpan semua perubahan ke dalam List Repository  Lokal

		"git add /namafolder/file.extensi"  	#untuk file tunggal
		_git add ._  				#untuk semua File (pastikan  di Path / Posisi dari Project)

3. Beri nama semua aksi yang telah dilakukan, agar dapat diteruskan ke Github.
		_git commit -m "Nama aksi yang dilakukan"_

4. cara Upload Prj ke Git
		_git push_

ket: Jika ada eror command lakukan intrukisi seperti yang dimunculkan eror itu

5. cara Download/sincron kan Prj
			
		_git fetch_
		_git pull_

**Jika Kurang Paham sebaiknya gunakan printah-perintah ini saja di cmd dari path/posisi terluar dari project**

#Inisiai user

_git config --global user.name "Ranur-react"_
_git config --global user.email "rahmatnur845@gmail.com"_

#Upload Project



_git status_
_git add ._ 
_git commit -m "Nama aksi yang dilakukan"_
_git push_


#Update Project

_git pull_