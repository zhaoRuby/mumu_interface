
import re
import urllib
#16-756 pictures
for i in range(16,757): 
	geturl = 'http://storybook.nlpi.edu.tw/book/info/'+str(i)

	page = urllib.urlopen(geturl)
	html = page.read()

	reg = r'src="(.+?\.jpg)"'
	imgre = re.compile(reg)
	imgList =re.findall(imgre,html)
	#print imgList

	for imgurl in imgList:
		urllib.urlretrieve(imgurl,'%s.jpg'%i)
