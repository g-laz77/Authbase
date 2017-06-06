from wand.image import Image
from PIL import Image as PI
import pyocr
import pyocr.builders
import io
import pytesseract

def image_scanner(filename):
    
    img_page = Image(image=filename)
    req_image = (img_page.make_blob('jpeg'))
    txt = pytesseract.image_to_string(PI.open(io.BytesIO(img)))
    final_text.append(txt)
    #check for the pattern
    return(final_text)