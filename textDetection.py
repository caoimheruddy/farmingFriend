import cv2
import pytesseract as pt
from PIL import Image

camera = cv2.VideoCapture(0)
if not camera.isOpened():
    print("The camera cannot open")
    exit()
while True:
    #this will capture frame by frame
    _, Image = camera.read()
    cv2.imshow("Farming Friend - Please scan the ear tag!", Image)
    if cv2.waitKey(1) & 0xFF==ord('q'):
        cv2.imwrite('sample.png', Image)

        hImage, wImage, _ = Image.shape
        cong = r'--oem 3 --psm 6 outputbase digits'
        boxes = pt.image_to_boxes(Image, config=cong)
        for b in boxes.splitlines():
            # print(b)
            b = b.split(' ')
            print(b)
            x, y, w, h = int(b[1]), int(b[2]), int(b[3]), int(b[4])
            cv2.rectangle(Image, (x, hImage - y), (w, hImage - h), (0, 0, 255), 3)
            cv2.putText(Image, b[0], (x, hImage - y + 55), cv2.FONT_HERSHEY_COMPLEX, 1, (50, 50, 255), 2)
            print(b)
        cv2.imshow('result', Image)
        cv2.waitKey(0)
        break

    # this is where we are detecting characters


camera.release()
cv2.destroyAllWindows()


def tesseract():
    path_to_tesseract = r'C:\\Program Files\\Tesseract-OCR\\tesseract.exe'
    pt.pytesseract.tesseract_cmd = path_to_tesseract
    image_path = "sample.png"
    text = pt.image_to_string(Image.open(image_path))
    print(text)


tesseract()


img = cv2.imread('sample.png')
img = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
print(pt.image_to_string(img))

# this is where we are detecting characters
hImg, wImg, _ = img.shape
cong = r'--oem 3 --psm 6 outputbase digits'
boxes = pt.image_to_boxes(img, config=cong)
for b in boxes.splitlines():
    #print(b)
    b = b.split(' ')
    print(b)
    x, y, w, h = int(b[1]), int(b[2]), int(b[3]), int(b[4])
    cv2.rectangle(img, (x, hImg-y), (w, hImg-h), (0, 0, 255), 3)
    cv2.putText(img, b[0], (x, hImg-y+55), cv2.FONT_HERSHEY_COMPLEX, 1, (50, 50, 255), 2)

cv2.imshow('result', Image)
cv2.waitKey(0)
