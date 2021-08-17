from bs4 import BeautifulSoup
import requests
import json

winning_Numbers_Sort_lotto = ['D539Control_history1_dlQuery_No1_','D539Control_history1_dlQuery_No2_','D539Control_history1_dlQuery_No3_','D539Control_history1_dlQuery_No4_','D539Control_history1_dlQuery_No5_']
winning_Date_lotto = ['D539Control_history1_dlQuery_D539_DDate_']

def search_winning_numbers(css_class):
    global winning_Numbers_Sort_lotto
    if(css_class != None):
        for i in range(len(winning_Numbers_Sort_lotto )):
            if winning_Numbers_Sort_lotto [i] in css_class:
                return css_class
def search_winning_date(css_class):
    global winning_Date_lotto
    if(css_class != None):
        for i in range(len(winning_Date_lotto )):
            if winning_Date_lotto [i] in css_class:
                return css_class
def parse_tw_lotto_html(data_Info, date_info, number_count):  
    data_Info_List = []
    data_Info_Dict = {}
    tmp_index = 0
    for index  in range(len(data_Info)) :
        if (index == 0) :
            data_Info_List.append(data_Info[index].text)  
        else:
            if(index % number_count != 0):
                data_Info_List.append(data_Info[index].text)
            else:
                data_Info_Dict[str(date_info[tmp_index].text)] = list(data_Info_List)
                data_Info_List= []
                data_Info_List.append(data_Info[index].text)
                tmp_index = tmp_index+1
        data_Info_Dict[str(date_info[tmp_index].text)] = list(data_Info_List)
    return data_Info_List,data_Info_Dict            
head_Html_lotto='https://www.taiwanlottery.com.tw/lotto/DailyCash/history.aspx'
res = requests.get(head_Html_lotto, timeout=30)
soup = BeautifulSoup(res.text,'lxml')
header_Info = soup.find_all(id=search_winning_numbers)
date_Info = soup.find_all(id=search_winning_date)
data_Info_List,data_Info_Dict  = parse_tw_lotto_html(header_Info, date_Info, 5)    
#print(data_Info_Dict)

data_json = json.dumps(data_Info_Dict)
#print(data_json)

path = './dailycash.json'
f = open(path, 'w')
f.write(data_json)
f.close()