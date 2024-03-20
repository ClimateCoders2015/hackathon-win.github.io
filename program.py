import math
foodname=["UAE Food bank-Al Quoz","UAE Food bank-Jabal Ali","UAE Food bank-Al Muhaisinah","UAE Food bank- Umm Al Quwain","UAE Food bank- Ajman","UAE Food bank- RAK"]
latfood=[25.1436135,24.9995836,25.2623344,25.5237787,25.4169428,25.7312055]
longfood=[55.2547099,55.1224508,55.4298805,55.553308,55.4917157,55.9479156]
url=["https://maps.app.goo.gl/pJnRnGzKhyfLYN7V8","https://maps.app.goo.gl/jD2GAbzNSVcdz5ga7","https://maps.app.goo.gl/4DdbZshD3W1nySxi9","https://maps.app.goo.gl/QHoGa784nvxdoHLw9","https://maps.app.goo.gl/1vz5YP4MMXWzny5A6","https://maps.app.goo.gl/Ck54HCmPdyMZicMJ8"]
lat1=float(input("Latitude of user: "))
lon1=float(input("Longitude of user: "))
def costcalculator():
    z=0
    for count in range(0,6):
        lat2=latfood[count]
        lon2=longfood[count]
        r = 6371
        p = 0.017453292519943295
        a = 0.5 - math.cos((lat2-lat1)*p)/2 + math.cos(lat1*p)*math.cos(lat2*p) * (1-math.cos((lon2-lon1)*p)) / 2
        displacement = 2 * r * math.asin((a)**0.5) 
        if count<1:
            z=displacement
            y=count
        elif displacement<z:
            z=displacement 
            y=count
    distance=z*2           
    if distance <= 20:
        fuel_cost=(z/20)*2.92+25
        fuel_costround=round(fuel_cost,2)
        print(fuel_costround)
        print(z)
        print(url[y])
    elif distance >= 20 and distance <= 50:
        fuel_cost=((distance+distance*.25)/20)*2.92+25
        fuel_costround=round(fuel_cost,2)
        print(fuel_costround)
        print(displacement)
        print(url[y])
    else:
        fuel_cost=((distance+distance*.5)/20)*2.92+25
        fuel_costround=round(fuel_cost,2)
        print(fuel_costround)
        print(displacement)
        print(url[y])
costcalculator()