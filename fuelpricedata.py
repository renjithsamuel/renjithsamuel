from bs4 import BeautifulSoup
from nbformat import write
import requests
import json

def get_content():
    url = "https://www.ndtv.com/fuel-prices/petrol-price-in-all-state"
    response = requests.get(url).text
    soup = BeautifulSoup(response, "html.parser")
    table = soup.find_all("tr")[0:]
    states = {}
    
    for row in table:
        row = list(filter(lambda x: x != "\n", row))
        state_name = row[0].text
        state_price = row[1].text.replace("\u20b9/", "")
        states[state_name] = state_price
    return states

def write_to_file(data):
    json_object = json.dumps(data, indent=4)
    with open("stateWisePrices.json", "w", encoding='utf-8') as file:
        file.write(json_object)


today_status = get_content()
write_to_file(today_status)