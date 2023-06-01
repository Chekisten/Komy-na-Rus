import requests
from bs4 import BeautifulSoup 
import time 


AIR_QUAL_KZN = 'https://air.plumelabs.com/air-quality-in-Kazan%E2%80%99-2jsX?utm_source=accuweather&utm_medium=current_aq_widget&utm_campaign=#ae16'


headers = {'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36'}


def check_air_qual_kzn():
    full_page = requests.get(AIR_QUAL_KZN, headers=headers)

    soup = BeautifulSoup(full_page.content, 'html.parser')

    convert = soup.findAll("span", {"data-role": "current-pi"})

    print("Сейчас качество воздуха в Казани = " + convert[0].text + "AQI")
    time.sleep(1800) 
    check_air_qual_kzn()
check_air_qual_kzn()

#Качество воздуха представлено сервисом Plume Labs