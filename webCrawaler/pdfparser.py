import sys
from pdfminer.pdfparser import PDFParser
from pdfminer.pdfdocument import PDFDocument
from pdfminer.pdfinterp import PDFResourceManager, PDFPageInterpreter
from pdfminer.pdfpage import PDFPage
from pdfminer.converter import XMLConverter, HTMLConverter, TextConverter
from pdfminer.layout import LAParams
from io import StringIO

def pdfparser(data):

    fp = open(data, 'rb')
    parser = PDFParser(fp)
    doc = PDFDocument(parser)
    parser.set_document(doc)
    #doc.set_parser(parser)
    rsrcmgr = PDFResourceManager()
    retstr = StringIO()
    codec = 'utf-8'
    laparams = LAParams()
    device = TextConverter(rsrcmgr, retstr, codec=codec, laparams=laparams)
    interpreter = PDFPageInterpreter(rsrcmgr, device)
    for i, page in enumerate(PDFPage.get_pages(fp)):
        interpreter.process_page(page)
        data = retstr.getvalue()
    
    return data.split()

if __name__ == '__main__':
    pdfparser(sys.argv[1])  