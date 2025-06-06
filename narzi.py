import requests
from PIL import Image
from io import BytesIO

# URL manzili
image_url = 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Mona_Lisa%2C_by_Leonardo_da_Vinci%2C_from_C2RMF_retouched.jpg/250px-Mona_Lisa%2C_by_Leonardo_da_Vinci%2C_from_C2RMF_retouched.jpg'

# Rasmni yuklab olish
response = requests.get(image_url)
img = Image.open(BytesIO(response.content))

# Rasmni ikkilik formatga o'zgartirish
img_byte_arr = io.BytesIO()
img.save(img_byte_arr, format="PNG")
img_byte_arr = img_byte_arr.getvalue()

# Ikkilik format
binary_data = ''.join(format(byte, '08b') for byte in img_byte_arr)
