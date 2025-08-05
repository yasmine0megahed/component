import cv2
import sys

input_path = sys.argv[1]
output_path = sys.argv[2]

image = cv2.imread(input_path)
gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)

# Detect likely text areas using MSER
mser = cv2.MSER_create()
regions, _ = mser.detectRegions(gray)

# Create a mask where text is marked
mask = gray.copy()
mask[:,:] = 255

for p in regions:
    x, y, w, h = cv2.boundingRect(p.reshape(-1, 1, 2))
    if w < image.shape[1] * 0.8 and h < image.shape[0] * 0.8:
        cv2.rectangle(mask, (x, y), (x + w, y + h), 0, -1)

# Inpaint the text regions
result = cv2.inpaint(image, 255 - mask, 3, cv2.INPAINT_TELEA)
cv2.imwrite(output_path, result)
