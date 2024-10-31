
Sizes = {'L': 6.00, 'XL': 10.00}
Toppings = {1: 1.00, 2: 1.75, 3: 2.50, 4: 3.35}
Hst_rate = 0.13

size = input("Pizza size (L/XL): ").upper()
toppings = int(input("Number of toppings (1-4): "))


subtotal = Sizes[size] + Toppings[toppings]
tax = subtotal * Hst_rate
total = subtotal + tax

print(subtotal)